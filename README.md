# Introduction to design patterns
The main goal is to produce easily maintainable and extendable code. Be careful not to overuse patterns on simple problems, it is always possible to refactor code when a feature becomes more complex over time. Knowing when to implement a pattern over a functional approach and vice versa is key.

Inspired by this great youtube series by Derek Banas: https://www.youtube.com/watch?v=vNHpsC5ng_E&list=PLF206E906175C7E07

## Strategy
Useful when multiple classes implement the same method but each implementation differs. Especially if an implementation has to change/switch at runtime.

## Factory
Create an object at runtime dependant on some factor where u need a bunch of if/else statements for each KIND of an object. Objects must inherit from the same super class.

## Abstract Factory
Factory on steroids. Useful when even the attributes of the objects that are being created need to provided by a factory. It can be thought of as combining the factory with the strategy pattern.

## Observer
When we want to push updates from the observed object that something has changed instead of the observer polling for changes. 

## Singleton
When u don't want more than one instance. Careful when using Threads.
