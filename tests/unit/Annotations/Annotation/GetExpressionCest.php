<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Unit\Annotations\Annotation;

use Phalcon\Annotations\Annotation;
use UnitTester;

class GetExpressionCest
{
    private $PHANNOT_T_STRING = 303;

    /**
     * Tests Phalcon\Annotations\Annotation :: getExpression()
     *
     * @author Jeremy PASTOURET <https://github.com/jenovateurs>
     * @since  2020-01-22
     */
    public function annotationsAnnotationGetExpression(UnitTester $I)
    {
        $I->wantToTest('Annotations\Annotation - getExpression()');

        $sValue = 'test';
        $sValue1 = 'test1';

        $aOneExpr = [
            'type'  => $this->PHANNOT_T_STRING,
            'value' => $sValue
        ];

        $aTwoExpr = [
            'type'  => $this->PHANNOT_T_STRING,
            'value' => $sValue1
        ];

        $aExpr = [
            [
                'expr' => $aOneExpr
            ],
            [
                'expr' => $aTwoExpr
            ]
        ];

        $oAnnotation = new Annotation([
            'name'       => 'NovAnnotation',
            'arguments'  => $aExpr
        ]);

        $I->assertEquals($oAnnotation->GetExpression($aOneExpr), $sValue);
        $I->assertEquals($oAnnotation->GetExpression($aTwoExpr), $sValue1);
    }
}
