Feature: There are a number of repositories we want to watch
  Scenario: I want to watch all the projects that my project depends on
    Given I am an authenticated user
    And  I have the following repositories:
          | owner    | project  |
          | Power_BI    | Power_BI    |
          | laravel  | laravel  |
          | laravel  | framework|
    When  I watch each repository
    Then My watch list will include those repositories