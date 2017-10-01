# Greeting Kata TDD
by Paula Muldoon

### About
This was a training exercise at Kurt Geiger.  I initially didn't plan to commit this to git - hence having six tests in a single commit.

I modified slightly the README of the original, to make the requirements clearer.  I also changed the design from a single class to multiple classes, to clarify the responsibilities in each class.  The design for this code is inspired by Sandi Metz, particularly [POODR](http://www.poodr.com/).  

Especially with this kata, there is an infinite amount of variations on greetings and edge cases.  On the principle of YAGNI, I limited myself to testing the specific examples provided by the authors rather than guessing what other contortions these specs might produce.

### [Diagram](https://www.draw.io/#HFiddlersCode%2FgreetingTDD%2Fmaster%2FgreetingKataPHPDiagram.xml)

### Instructions
- Run `composer init` and create the `composer.json` file
- To run tests: `phpunit tests`
---
## Processes
* TDD

---
# The Greeting Kata

This [Kata](https://en.wikipedia.org/wiki/Kata_(programming)) is designed to help practice what a test of a pure function ought to look like. It is intentionally designed to start with a very easy, non-branching base case which slowly becomes addled with complexity as additional requirements are added that will require significant branching and eventually a pressure to compose additional units.

This Kata was suggested by [Nick Gauthier](http://ngauthier.com) and inspired a bit by Bob from [Exercism](http://exercism.io).

This Kata is designed to be used with [Detroit-school TDD](https://github.com/testdouble/contributing-tests/wiki/Detroit-school-TDD).

## Requirement 1

Write a method `greet(name)` that interpolates `name` in a simple greeting. 

Example: when `name` is `"Bob"`, the method should return the string `"Hello, Bob."`.

## Requirement 2

Handle nulls by introducing a stand-in. 

Example: when `name` is null, then the method should return the string `"Hello, my friend."`

## Requirement 3

Handle uppercase names by returning an uppercase greeting.

Example: when `name` is `"JERRY"` then the method should return the string `"HELLO JERRY!"`

## Requirement 4

Handle an array of two names.  

Example: when `name` is `["Jill", "Jane"]`, then the method should return the string `"Hello, Jill and Jane."`

## Requirement 5

Handle arrays of 3 or more names. 

Example: when `name` is `["Amy", "Brian", "Charlotte"]`, then the method should return the string `"Hello, Amy, Brian, and Charlotte."`

## Requirement 6
Handle arrays of mixed case names.

Example: when `name` is `["Amy", "BRIAN", "Charlotte"]`, then the method should return the string `"Hello, Amy and Charlotte. AND HELLO BRIAN!"`

## Requirement 7
Handle arrays of names where a single item in the array contains two names.

Example: when `name` is `["Bob", "Charlie, Dianne"]`, then the method should return the string `"Hello, Bob, Charlie, and Dianne."`.

## Requirement 8
Handle deliberate commas indicated by escaped double quotation marks.

Example: when `name` is ["Bob", "\"Charlie, Dianne\""], then the method should return the string 
`"Hello, Bob and Charlie, Dianne."`.
