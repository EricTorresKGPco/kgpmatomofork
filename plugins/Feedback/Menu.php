<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\Feedback;

use Piwik\Menu\MenuUser;
use Piwik\Piwik;

/**
 */
class Menu extends \Piwik\Plugin\Menu
{
    public function configureUserMenu(MenuUser $menu)
    {
        $menu->add(
            'General_Help',
            'General_Help',
            array('module' => 'Feedback', 'action' => 'index', 'segment' => false),
            true,
            $order = 20,
            $tooltip = Piwik::translate('Feedback_TopLinkTooltip')
        );
    }
}
