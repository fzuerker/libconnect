<?php
namespace Sub\Libconnect\ViewHelpers;
/**
 * This class is a view helper that compare variables.
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */

class CompareViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Returns true if $a and $b are type-equal, false otherwise.
     *
     * @param mixed $a
     * @param mixed $b
     * @return boolean
     */
    public function render($a, $b) {
        return $a == $b;
    }
}
?>