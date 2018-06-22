<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace tests\verification\Tests;

use tests\util\MftfTestCase;

class SkippedGenerationTest extends MftfTestCase
{
    /**
     * Tests skipped test generation.
     *
     * @throws \Exception
     * @throws \Magento\FunctionalTestingFramework\Exceptions\TestReferenceException
     */
    public function testSkippedGeneration()
    {
        $this->generateAndCompareTest('SkippedTest');
    }

    /**
     * Tests skipped test with multiple issues generation.
     *
     * @throws \Exception
     * @throws \Magento\FunctionalTestingFramework\Exceptions\TestReferenceException
     */
    public function testMultipleSkippedIssuesGeneration()
    {
        $this->generateAndCompareTest('SkippedTestTwoIssues');
    }
}
