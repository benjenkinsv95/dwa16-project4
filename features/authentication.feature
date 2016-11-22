# Created by ben at 11/21/2016
# This was my first exposure to BDD and is heavily based off of this
# BDD/Authentication tutorial: https://laracasts.com/lessons/laravel-5-and-behat-driving-authentication
Feature: Membership
    In order to let users edit pronunciations
    As an administrator
    I need to authenticate and register users

  Scenario: Registration
    When I register "JonathonDough" "jonathon.dough@example.com"
    Then I should have an account

  Scenario: Successful Authentication
    Given I have an account "JonathonDough" "jonathon.dough@example.com"
    When I sign in
    Then I should be logged in

  Scenario: Failed Authentication
    When I sign in with invalid credentials
    Then I should not be logged in