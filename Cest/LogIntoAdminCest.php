<?php
namespace Magento\AcceptanceTest\Backend\Cest;

use Magento\AcceptanceTest\Backend\Page\AdminLoginPage;
use Magento\AcceptanceTestFramework\Step\Backend\AdminStep;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * @Features({"Admin Login"})
 * @Stories({"Access Admin Login Page"})
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class LogIntoAdminCest
{
	/**
	 * @Title("Title")
	 * @Description("You should be able to log into the Magento Admin backend.")
	 * @Severity(level = SeverityLevel::CRITICAL)
	 * @Parameter(name = "AdminStep", value = "$I")
	 * @Parameter(name = "AdminLogin", value = "$loginPage")
	 * @group banana
	 * @param AdminStep $I
	 * @param AdminLoginPage $loginPage
	 * @return void
	 */
	public function logIntoAdmin(AdminStep $I, AdminLoginPage $loginPage)
	{
		$I->am('an Admin.');
		$I->wantTo('verify that I can access the Admin Login page.');
		$I->goToTheAdminLoginPage();
		$I->shouldBeOnTheAdminDashboardPage();
	}
}
