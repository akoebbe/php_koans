<?php
namespace KoansLib;

use PHPUnit\Framework\TestResult;
use PHPUnit\Util\TestDox\CliTestDoxPrinter;

/**
 * Class KoanPrinter
 *
 * Override the basic PHPUnit ResultPrinter to produce a more mindful output
 *
 * @package KoansLib
 */
class KoanPrinter extends CliTestDoxPrinter
{
    public function printResult(TestResult $result): void
    {
        $this->printHeader($result);

        $this->printFooter($result);
    }

    protected function printHeader($result): void
    {
        $this->write("\n\n");
    }

    protected function printFooter(TestResult $result): void
    {
        if (\count($result) === 0) {
            $this->writeWithColor(
                'fg-black, bg-yellow',
                'No tests executed!'
            );

            return;
        }

        if ($result->wasSuccessful() &&
            $result->allHarmless() &&
            $result->allCompletelyImplemented() &&
            $result->noneSkipped()) {
            $this->writeWithColor(
                'fg-black, bg-green',
                \sprintf(
                    'You have traversed the mountain path. You have found peace. (%d koan%s)',
                    \count($result),
                    (\count($result) == 1) ? '' : 's',
                    $this->numAssertions,
                    ($this->numAssertions == 1) ? '' : 's'
                )
            );
        } else {
            if ($result->wasSuccessful()) {
                $color = 'fg-black, bg-yellow';

                if ($this->verbose || !$result->allHarmless()) {
                    $this->write("\n");
                }

                $this->writeWithColor(
                    $color,
                    'OK, but incomplete, skipped, or risky tests!'
                );
            } else {
                $this->write("\n");

                if ($result->errorCount()) {
                    $color = 'fg-white, bg-red';

                    $this->writeWithColor(
                        $color,
                        'Error: You have stumbled on your path, but you are capable of recovering!'
                    );
                } elseif ($result->failureCount()) {
                    $color = 'fg-white, bg-blue';

                    $this->writeWithColor(
                        $color,
                        'You are making progress but have more to learn. Contemplate the message above further.'
                    );
                } elseif ($result->warningCount()) {
                    $color = 'fg-white, bg-blue';

                    $this->writeWithColor(
                        $color,
                        'WARNINGS!'
                    );
                }
            }

            $this->writeCountString($this->numTests, 'Total Koans', $color, true);
            $this->writeCountString(count($result->passed()), 'Koans Completed', $color, true);
            $this->writeCountString($result->errorCount(), 'Errors', $color);
            $this->writeWithColor($color, '.');
        }
    }

    /**
     * Copied verbatim from ResultPrinter because it is private and the printFooter calls this.
     *
     * @param int $count
     * @param string $name
     * @param string $color
     * @param bool $always
     */
    private function writeCountString(int $count, string $name, string $color, bool $always = false): void
    {
        static $first = true;

        if ($always || $count > 0) {
            $this->writeWithColor(
                $color,
                \sprintf(
                    '%s%s: %d',
                    !$first ? ', ' : '',
                    $name,
                    $count
                ),
                false
            );

            $first = false;
        }
    }

}
