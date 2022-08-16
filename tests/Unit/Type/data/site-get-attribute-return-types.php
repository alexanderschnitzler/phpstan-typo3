<?php declare(strict_types = 1);

namespace SiteGetAttributeReturnTypes;

use TYPO3\CMS\Core\Site\Entity\Site;

use function PHPStan\Testing\assertType;

// phpcs:ignore Squiz.Classes.ClassFileName.NoMatch
class MySite
{

	public function getAttributeTests(Site $site): void
	{
		assertType('string', $site->getAttribute('base'));
		assertType('array<int, mixed>', $site->getAttribute('baseVariants'));
		assertType('array<int, mixed>', $site->getAttribute('errorHandling'));
		assertType('array<int, mixed>', $site->getAttribute('languages'));
		assertType('int', $site->getAttribute('rootPageId'));
		assertType('array', $site->getAttribute('routeEnhancers'));
		assertType('string', $site->getAttribute('websiteTitle'));
		assertType('int', $site->getAttribute('myCustomIntAttribute'));
		assertType('string', $site->getAttribute('myCustomStringAttribute'));
	}

}
