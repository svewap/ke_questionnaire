<?php
namespace Kennziffer\KeQuestionnaire\Utility;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Kennziffer.com <info@kennziffer.com>, www.kennziffer.com
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package ke_questionnaire
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ArrayUtility {

	/**
	 * Remove NULL values from array
	 *
	 * @param array $nullArray
	 * @param boolean $hasObjectsInside
	 * @return array Array without NULL values
	 */
	public static function removeNullValues($nullArray, $hasObjectsInside = false) {
		if (!is_array($nullArray)) return $nullArray;
		if ($hasObjectsInside) {
			return array_filter($nullArray, [__CLASS__, 'isNotNull']);
		}
		return array_flip(array_flip($nullArray));
	}

	/**
	 * helper method for removeNullValues
	 *
	 * @param mixed $value
	 * @return boolean Returns TRUE if value is NOT NULL
	 */
	protected static function isNotNull($value) {
		return ($value !== NULL);
	}

}
