<?php
namespace SJBR\StaticInfoTables\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Achim Fritz <af@lightwerk.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * The Country Zone model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class CountryZone extends AbstractEntity {

	/**
	 * @var string
	 */
	protected $nameNl = '';

	/**
	 * @param string $nameNl
	 * @return void
	 */
	public function setNameNl($nameNl) {
		$this->nameNl = $nameNl;
	}

	/**
	 * @return string
	 */
	public function getNameNl() {
		if ($this->nameNl === '') {
			return $this->getLocalName();
		}
		return $this->nameNl;
	}
}
?>