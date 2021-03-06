<?php
namespace Sub\Libconnect\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This class is a view helper that returns a substring.
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class TruncateNpViewHelper extends AbstractViewHelper {

    use CompileWithRenderStatic;

    public function initializeArguments() {
        $this->registerArgument('string', 'string', 'The to decode url.', FALSE);
        $this->registerArgument('length', 'integer', 'The length ot the substring.', FALSE);
    }

    /**
     * Returns truncated string
     * 
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return string
     */
    public static function renderStatic ( array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext ) {

        return mb_substr($arguments['string'], 0, $arguments['length']);
    }
}
?>
