<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Illuminate\Support\Facades\Auth;
use Laracasts\Behat\Context\DatabaseTransactions;
use Laracasts\Behat\Context\Migrator;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    use Migrator, DatabaseTransactions;
    private static $dummyPassword = 'password';

    private $name;
    private $email;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When I register :name :email
     */
    public function iRegister($name, $email)
    {
        $this->name = $name;
        $this->email = $email;

        $this->visit("register");

        $this->fillField('name', $name);
        $this->fillField('email', $email);
        $this->fillField('password', self::$dummyPassword);
        $this->fillField('password_confirmation', self::$dummyPassword);

        $this->pressButton('Register');
    }

    /**
     * @Then I should have an account
     */
    public function iShouldHaveAnAccount()
    {
        $this->assertSignedIn();
    }

    /**
     * @Given I have an account :name :email
     */
    public function iHaveAnAccount($name, $email)
    {
        $this->iRegister($name, $email);

        Auth::logout();
    }

    /**
     * @When I sign in
     */
    public function iSignIn()
    {
        $this->visit('login');

        $this->fillField('email', $this->email);
        $this->fillField('password', self::$dummyPassword);

        $this->pressButton('Login');
    }

    /**
     * @When I sign in with invalid credentials
     */
    public function iSignInWithInvalidCredentials()
    {
        $this->email = "invalid@example.com";

        $this->iSignIn();
    }

    /**
     * @Then I should be logged in
     */
    public function iShouldBeLoggedIn()
    {
        $this->assertSignedIn();
    }

    private function assertSignedIn()
    {
        TestCase::assertTrue(Auth::check());
    }



    /**
     * @Then I should not be logged in
     */
    public function iShouldNotBeLoggedIn()
    {
        TestCase::assertTrue(Auth::guest());

        $this->assertPageAddress('login');

        $this->assertPageContainsText('These credentials do not match our records.');
    }
}
