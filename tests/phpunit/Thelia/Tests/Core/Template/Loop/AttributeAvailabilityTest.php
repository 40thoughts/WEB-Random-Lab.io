<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Thelia\Tests\Core\Template\Loop;

use Thelia\Tests\Core\Template\Element\BaseLoopTestor;

use Thelia\Core\Template\Loop\AttributeAvailability;

/**
 *
 * @author Etienne Roudeix <eroudeix@openstudio.fr>
 *
 */
class AttributeAvailabilityTest extends BaseLoopTestor
{
    public function getTestedClassName()
    {
        return 'Thelia\Core\Template\Loop\AttributeAvailability';
    }

    public function getTestedInstance()
    {
        return new AttributeAvailability($this->container);
    }

    public function getMandatoryArguments()
    {
        return array();
    }
}
