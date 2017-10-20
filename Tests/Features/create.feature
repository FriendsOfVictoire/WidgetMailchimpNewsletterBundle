@mink:selenium2 @alice(Page)  @reset-schema
Feature: Create a MailchimpNewsletter widget

    Background:
        Given I maximize the window
        And I am on homepage

    Scenario: I create a new MailchimpNewsletter widget
        When I switch to "layout" mode
        Then I should see "New content"
        When I select "Mailchimp Newsletter" from the "1" select of "main_content" slot
        Then I should see "Widget (Mailchimp Newsletter)"
        And I should see "1" quantum