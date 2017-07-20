<?php
/**
 * This file is part of fpdi-tfpdf
 *
 * @package   fpdi-tfpdf
 * @copyright Copyright (c) 2017 Binary Protocol - James Jarman (http://www.binaryprotocol.co.uk)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 * @version   1.0
 */

/**
 * This file is used as a bridge between FPDI and tFPDF
 * It will dynamically create the class extending the available
 * class tFPDF.
 */

if (!class_exists('PDF', false)) {
    /**
     * Class fpdi_bridge
     */
    class fpdi_bridge extends PDF
    {
        // empty body
    }

} else {

    die('Could not find tFPDF class.');

}