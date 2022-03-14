<?php

declare(strict_types=1);

/**
 * This code was generated by Berp (http://https://github.com/gasparnagy/berp/).
 *
 *  Changes to this file may cause incorrect behavior and will be lost if
 *  the code is regenerated.
 */

namespace Cucumber\Gherkin\Parser;

use Cucumber\Gherkin\Token;

interface TokenMatcherInterface
{
    public function match_EOF(Token $token): bool;
    public function match_Empty(Token $token): bool;
    public function match_Comment(Token $token): bool;
    public function match_TagLine(Token $token): bool;
    public function match_FeatureLine(Token $token): bool;
    public function match_RuleLine(Token $token): bool;
    public function match_BackgroundLine(Token $token): bool;
    public function match_ScenarioLine(Token $token): bool;
    public function match_ExamplesLine(Token $token): bool;
    public function match_StepLine(Token $token): bool;
    public function match_DocStringSeparator(Token $token): bool;
    public function match_TableRow(Token $token): bool;
    public function match_Language(Token $token): bool;
    public function match_Other(Token $token): bool;
    public function reset(): void;
}