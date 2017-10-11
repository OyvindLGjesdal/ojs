<?php

/**
 * @file classes/services/OJSServiceProvider.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class OJSServiceProvider
 * @ingroup services
 *
 * @brief Utility class to package all OJS services
 */

namespace OJS\Services;

use \Pimple\Container;
use \OJS\Services\IssueService;
use \OJS\Services\AuthorService;
use \OJS\Services\GalleyService;

class OJSServiceProvider implements \Pimple\ServiceProviderInterface {

	/**
	 * Registers services
	 * @param Pimple\Container $pimple
	 */
	public function register(Container $pimple) {

		// Submission service
		$pimple['submission'] = function() {
			return new SubmissionService();
		};

		// Issue service
		$pimple['issue'] = function() {
			return new IssueService();
		};

		// Section service
		$pimple['section'] = function() {
			return new SectionService();
		};

		// NavigationMenus service
		$pimple['navigationMenu'] = function() {
			return new NavigationMenuService();
		};

		// Author service
		$pimple['author'] = function() {
			return new AuthorService();
		};

		// Galley service
		$pimple['galley'] = function() {
			return new GalleyService();
		};
	}
}
