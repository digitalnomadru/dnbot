# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 3.3.0 - 2021-01-06

### Added

- [#3](https://github.com/mezzio/mezzio-router/pull/3) adds a new class, `Mezzio\Router\DuplicateRouteDetector`, which improves performance of duplicate route detection dramatically.

### Changed

- [#3](https://github.com/mezzio/mezzio-router/pull/3) changes the constructor of the `Mezzio\Router\RouteCollector` class to allow passing an optional flag (enabled by default) indicating whether or not to perform duplicate route detection. Internally, when the flag is enabled, the collector instantiates and memoizes a `DuplicateRouteDetector` on the addition of the first route.

- [#3](https://github.com/mezzio/mezzio-router/pull/3) changes the `Mezzio\Router\RouteCollectorFactory` behavior to optionally look for a `Mezzio\Router\RouteCollector.detect_duplicates` flag in the `config` service; if found, the value is used when instantiating the `RouteCollector` instance.


-----

### Release Notes for [3.3.0](https://github.com/mezzio/mezzio-router/milestone/5)

Feature release (minor)

### 3.3.0

- Total issues resolved: **2**
- Total pull requests resolved: **2**
- Total contributors: **3**

#### Enhancement

 - [13: Psalm integration](https://github.com/mezzio/mezzio-router/pull/13) thanks to @weierophinney and @boesing
 - [3: Optimize route addition](https://github.com/mezzio/mezzio-router/pull/3) thanks to @nightlinus and @weierophinney

## 3.2.1 - 2020-10-24

### Deprecated

- [#11](https://github.com/mezzio/mezzio-router/pull/11)
  deprecates the class `\Mezzio\Router\Test\ImplicitMethodsIntegrationTest`,
  as it will be removed in the next versions. Use new renamed class
  `\Mezzio\Router\Test\AbstractImplicitMethodsIntegrationTest` instead.


-----

### Release Notes for [3.2.1](https://github.com/mezzio/mezzio-router/milestone/4)

3.2.x bugfix release (patch)

### 3.2.1

- Total issues resolved: **0**
- Total pull requests resolved: **1**
- Total contributors: **1**

#### Bug

 - [11: Restore renamed abstract ImplicitMethodsIntegrationTest class](https://github.com/mezzio/mezzio-router/pull/11) thanks to @marcelthole

## 3.2.0 - 2020-10-24

### Added

- [#9](https://github.com/mezzio/mezzio-router/pull/9) Add PHP 8.0 support

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.1.3 - 2020-06-22

### Added

- Nothing.

### Changed

- [#6](https://github.com/mezzio/mezzio-router/pull/6) moves the phpspec/prophecy requirement to the require-dev section, as it is unnedeed in production.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.1.2 - 2020-06-16

### Added

- Nothing.

### Changed

- [#5](https://github.com/mezzio/mezzio-router/pull/5) removes verbiage in `RouterInterface::addRoute()` around when to raise exceptions within implementations. No current implementations have a need to, and the verbiage could almost be construed as proscribing implementation details.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#4](https://github.com/mezzio/mezzio-router/pull/4) updates the `$methods` and `$name` arguments to the `Route` constructor to make them nullable. Both already allowed `null` values internally, but the constructor did not reflect that.

## 3.1.1 - 2019-10-16

### Added

- [zendframework/zend-expressive-router#80](https://github.com/zendframework/zend-expressive-router/pull/80) adds support for PHP 7.3.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.1.0 - 2018-06-05

### Added

- Nothing.

### Changed

- [zendframework/zend-expressive-router#76](https://github.com/zendframework/zend-expressive-router/pull/76) modifies the `RouteMiddlewareFactory` to allow specifying a string
  `$routererviceName` to its constructor. This change allows having discrete
  factory instances for generating route middleware that use different router
  instances.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.0.3 - 2018-05-10

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-router#74](https://github.com/zendframework/zend-expressive-router/pull/74) fixes
  an issue with the `ImplicitHeadMiddleware` where matched route parameters
  were not copied into the request and would cause exceptions that would
  normally not happen for GET requests.

## 3.0.2 - 2018-03-21

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-router#73](https://github.com/zendframework/zend-expressive-router/pull/73) fixes
  an issue with the `ImplicitOptionsMiddleware` whereby a path match failure was
  incorrectly being identified as a method match failure, triggering the
  `ImplicitOptionsMiddleware` to attempt to return a response.

## 3.0.1 - 2018-03-19

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-router#69](https://github.com/zendframework/zend-expressive-router/pull/69) fixes
  the exception message emitted for missing dependencies when creating a
  `RouteCollector` instance to refer that class.

## 3.0.0 - 2018-03-15

### Added

- [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50) adds
  `Mezzio\Router\ConfigProvider`, and registers it with the package.
  The class defines and returns the initial dependencies for the package.

- [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50) adds
  factory classes for all shipped middleware. In some cases
  (`ImplicitHeadMiddleware`, `ImplicitOptionsMiddleware`, and
  `MethodNotAllowedMiddleware`), these rely on additional services that you will
  need to configure within your application in order to work properly. See each
  factory for details.

- [zendframework/zend-expressive-router#47](https://github.com/zendframework/zend-expressive-router/pull/47),
  [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50), and
  [zendframework/zend-expressive-router#64](https://github.com/zendframework/zend-expressive-router/pull/64) add
  the `Mezzio\Router\RouteCollector` class,
  which composes a `RouterInterface`, and provides methods for defining and
  creating path+method based routes. It exposes the following methods:

  - `route(string $path, MiddlewareInterface $middleware, array $methods = null, string $name = null) : Route`
  - `get(string $path, MiddlewareInterface $middleware, string $name = null) : Route`
  - `post(string $path, MiddlewareInterface $middleware, string $name = null) : Route`
  - `put(string $path, MiddlewareInterface $middleware, string $name = null) : Route`
  - `patch(string $path, MiddlewareInterface $middleware, string $name = null) : Route`
  - `delete(string $path, MiddlewareInterface $middleware, string $name = null) : Route`
  - `any(string $path, MiddlewareInterface $middleware, string $name = null) : Route`

- [zendframework/zend-expressive-router#48](https://github.com/zendframework/zend-expressive-router/pull/48) and
  [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50) adds
  `Mezzio\Router\Middleware\MethodNotAllowedMiddleware`. This middleware checks if
  the request composes a `RouteResult`, and, if so, if it is due to a method
  failure. If neither of those conditions is true, it delegates processing of
  the request to the handler. Otherwise, it uses a composed response prototype
  in order to create a "405 Method Not Allowed" response, with an `Allow` header
  containing the list of allowed request methods.

- [zendframework/zend-expressive-router#49](https://github.com/zendframework/zend-expressive-router/pull/49) and
  [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50) add
  the class `Mezzio\Router\Middleware\ImplicitHeadMiddleware`. This
  middleware will answer a `HEAD` request for a given route. If no route was
  matched, or the route allows `HEAD` requests, it delegates to the handler. If
  the route does not allow a `GET` request, it returns an empty response, as
  composed in the middleware. Otherwise, it issues a `GET` request to the
  handler, indicating the method was forwarded for a `HEAD` request, and then
  returns the response with an empty body.

- [zendframework/zend-expressive-router#49](https://github.com/zendframework/zend-expressive-router/pull/49) and
  [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50) add
  the class `Mezzio\Router\Middleware\ImplicitOptionsMiddleware`. This
  middleware handles `OPTIONS` requests when a route result is present and the
  route does not explicitly support `OPTIONS` (and otherwise delegates to the
  handler). In those conditions, it returns the response composed in the
  middleware, with an `Allow` header indicating the allowed methods.

- [zendframework/zend-expressive-router#39](https://github.com/zendframework/zend-expressive-router/pull/39) and
  [zendframework/zend-expressive-router#45](https://github.com/zendframework/zend-expressive-router/pull/45) add
  PSR-15 `psr/http-server-middleware` support.

- [zendframework/zend-expressive-router#53](https://github.com/zendframework/zend-expressive-router/pull/53) and
  [zendframework/zend-expressive-router#58](https://github.com/zendframework/zend-expressive-router/pull/58) add an
  abstract test case, `Mezzio\Router\Test\ImplicitMethodsIntegrationTest`.
  Implementors of `RouterInterface` should extend this class in their own test
  suite to ensure that they create appropriate `RouteResult` instances for each
  of the following cases:

  - `HEAD` request called and matches one or more known routes, but the method
    is not defined for any of them.
  - `OPTIONS` request called and matches one or more known routes, but the method
    is not defined for any of them.
  - Request matches one or more known routes, but the method is not allowed.

  In particular, these tests ensure that implementations marshal the list of
  allowed HTTP methods correctly in the latter two cases.

### Changed

- [zendframework/zend-expressive-router#41](https://github.com/zendframework/zend-expressive-router/pull/41) updates
  the `Route` class to provide typehints for all arguments and return values.
  Typehints were generally derived from the existing annotations, with the
  following items of particular note:
  - The constructor `$middleware` argument typehints on the PSR-15
    `MiddlewareInterface`.
  - The `getMiddleware()` method now explicitly returns a PSR-15
    `MiddlewareInterface` instance.
  - `getAllowedMethods()` now returns a nullable `array`.

- [zendframework/zend-expressive-router#41](https://github.com/zendframework/zend-expressive-router/pull/41) and
  [zendframework/zend-expressive-router#43](https://github.com/zendframework/zend-expressive-router/pull/43) update
  the `RouteResult` class to add typehints for all arguments and return values,
  where possible. Typehints were generally derived from the existing
  annotations, with the following items of particular note:
  - The `$methods` argument to `fromRouteFailure()` is now a nullable array
    (with `null` representing the fact that any method is allowed),
    **without a default value**. You must provide a value when creating a route
    failure.
  - `getAllowedMethods()` will now return `['*']` when any HTTP method is
    allowed; this will evaluate to a valid `Allows` header value, and is the
    recommended value when any HTTP method is allowed.

- [zendframework/zend-expressive-router#41](https://github.com/zendframework/zend-expressive-router/pull/41) updates
  the `RouteInterface` to add typehints for all arguments and return values. In
  particular, thse are now:
  - `addRoute(Route $route) : void`
  - `match(Psr\Http\Message\ServerRequestInterface $request) : RouteResult`
  - `generateUri(string $name, array $substitutions = [], array $options = []) : string`

- [zendframework/zend-expressive-router#47](https://github.com/zendframework/zend-expressive-router/pull/47)
  modifies the `RouteMiddleware::$router` property to make it `protected`
  visibility, allowing extensions to work with it.

- [zendframework/zend-expressive-router#48](https://github.com/zendframework/zend-expressive-router/pull/48)
  modifies `Mezzio\Router\Route` to implement the PSR-15
  `MiddlewareInterface`. The new `process()` method proxies to the composed
  middleware.

- [zendframework/zend-expressive-router#48](https://github.com/zendframework/zend-expressive-router/pull/48)
  modifies `Mezzio\Router\RouteResult` to implement the PSR-15
  `MiddlewareInterface`. The new `process()` method proxies to the composed
  `Route` instance in the case of a success, and otherwise delegates to the
  passed handler instance.

- [zendframework/zend-expressive-router#48](https://github.com/zendframework/zend-expressive-router/pull/48)
  modifies `Mezzio\Router\DispatchMiddleware` to process the
  `RouteResult` directly, instead of pulling middleware from it.

- [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50) renames
  `Mezzio\Router\RouteMiddleware` to
  `Mezzio\Router\Middleware\RouteMiddleware`.

- [zendframework/zend-expressive-router#50](https://github.com/zendframework/zend-expressive-router/pull/50) renames
  `Mezzio\Router\DispatchMiddleware` to
  `Mezzio\Router\Middleware\DispatchMiddleware`.

- [zendframework/zend-expressive-router#58](https://github.com/zendframework/zend-expressive-router/pull/58) changes
  the constructor of `ImplicitHeadMiddleware` to accept a `RouterInterface`
  instead of a response factory. Internally, this allows it to re-match the
  current request using the `GET` method; the middleware never generates its own
  response any longer.

- [zendframework/zend-expressive-router#58](https://github.com/zendframework/zend-expressive-router/pull/58) changes
  the logic of `Route::allowsMethod()`; it no longer returns `true` for `HEAD`
  or `OPTIONS` requests if they are not explicitly in the list of allowed
  methods.

- [zendframework/zend-expressive-router#59](https://github.com/zendframework/zend-expressive-router/pull/59) changes
  the behavior of the `Route` constructor: it now raises an exception if the
  list of HTTP methods provided to it is empty. Routes MUST have one or more
  HTTP methods associated.

- [zendframework/zend-expressive-router#60](https://github.com/zendframework/zend-expressive-router/pull/60) changes
  the behavior of the `RouteResult::getAllowedMethods()` to allow a nullable
  return value; this will return `null` if all methods are allowed.

### Removed

- [zendframework/zend-expressive-router#39](https://github.com/zendframework/zend-expressive-router/pull/39) and
  [zendframework/zend-expressive-router#41](https://github.com/zendframework/zend-expressive-router/pull/41) remove
  PHP 5.6 and PHP 7.0 support.

- [zendframework/zend-expressive-router#48](https://github.com/zendframework/zend-expressive-router/pull/48)
  removes the method `Mezzio\Router\RouteResult::getMatchedMiddleware()`;
  the method is no longer necessary, as the class now implements
  `MiddlewareInterface` and proxies to the underlying route.

- [zendframework/zend-expressive-router#58](https://github.com/zendframework/zend-expressive-router/pull/58) removes
  the following methods from `Route`, as they are no longer used:

  - `implicitHead()`
  - `implicitOptions()`

### Fixed

- [zendframework/zend-expressive-router#53](https://github.com/zendframework/zend-expressive-router/pull/53) fixes
  logic in the `ImplicitHeadMiddleware` and `ImplicitOptionsMiddleware` classes
  with regards to how they determine that an implicit `HEAD` or `OPTIONS`
  request (respectively) has occurred.

- [zendframework/zend-expressive-router#66](https://github.com/zendframework/zend-expressive-router/pull/66)
  improves the exception message raised when a route conflict is detected to
  include the path, HTTP methods, and name (if available).

## 2.4.1 - 2018-03-08

### Added

- Nothing.

### Changed

- [zendframework/zend-expressive-router#63](https://github.com/zendframework/zend-expressive-router/pull/63)
  improves the deprecation notice raised by the `Mezzio\Router\Route`
  constructor when non-middleware interface implementations are passed for the
  `$middleware` argument. The message not contains the path, HTTP methods, and
  middleware type that were used to create the `Route` instance.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.4.0 - 2018-03-08

### Added

- [zendframework/zend-expressive-router#54](https://github.com/zendframework/zend-expressive-router/pull/54) adds
  the middleware `Mezzio\Router\Middleware\DispatchMiddleware` and
  `Mezzio\Router\Middleware\RouteMiddleware`. These are the same as the
  versions shipped in 2.3.0, but under a new namespace.

- [zendframework/zend-expressive-router#55](https://github.com/zendframework/zend-expressive-router/pull/55) adds
  `Mezzio\Router\Middleware\ImplicitHeadMiddleware`. It is imported
  from mezzio, and implements the same functionality.

- [zendframework/zend-expressive-router#55](https://github.com/zendframework/zend-expressive-router/pull/55) adds
  `Mezzio\Router\Middleware\ImplicitOptionsMiddleware`. It is imported
  from mezzio, and implements the same functionality.

- [zendframework/zend-expressive-router#57](https://github.com/zendframework/zend-expressive-router/pull/57) adds
  the following factories for use with PSR-11 containers:

  - Mezzio\Router\Middleware\DispatchMiddlewareFactory`
  - Mezzio\Router\Middleware\ImplicitHeadMiddlewareFactory`
  - Mezzio\Router\Middleware\ImplicitOptionsMiddlewareFactory`
  - Mezzio\Router\Middleware\RouteMiddlewareFactory`

- [zendframework/zend-expressive-router#57](https://github.com/zendframework/zend-expressive-router/pull/57) adds
  `Mezzio\Router\ConfigProvider`, mapping the above factories to their
  respective middleware, and exposing it to laminas-component-installer via the
  package definition.

### Changed

- Nothing.

### Deprecated

- [zendframework/zend-expressive-router#56](https://github.com/zendframework/zend-expressive-router/pull/56)
  deprecates the method `Mezzio\RouteResult::getMatchedMiddleware()`,
  as it will be removed in version 3. If you need access to the middleware,
  use `getMatchedRoute()->getMiddleware()`. (In version 3, the `RouteResult`
  _is_ middleware, and will proxy to it.)

- [zendframework/zend-expressive-router#56](https://github.com/zendframework/zend-expressive-router/pull/56)
  deprecates passing non-MiddlewareInterface instances to the constructor of
  `Mezzio\Route`. The class now triggers a deprecation notice when this
  occurs, indicating the changes the developer needs to make.

- [zendframework/zend-expressive-router#54](https://github.com/zendframework/zend-expressive-router/pull/54)
  deprecates the middleware `Mezzio\Router\DispatchMiddleware` and
  `Mezzio\Router\RouteMiddleware`. The final versions in the v3 release
  will be under the `Mezzio\Router\Middleware` namespace; please use
  those instead.

- [zendframework/zend-expressive-router#55](https://github.com/zendframework/zend-expressive-router/pull/55)
  deprecates two methods in `Mezzio\Router\Route`:

  - `implicitHead()`
  - `implicitOptions()`

  Starting in 3.0.0, implementations will need to return route result failures
  that include all allowed methods when matching `HEAD` or `OPTIONS` implicitly.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.3.0 - 2018-02-01

### Added

- [zendframework/zend-expressive-router#46](https://github.com/zendframework/zend-expressive-router/pull/46) adds
  two new middleware, imported from mezzio and re-worked for general
  purpose usage:

  - `Mezzio\Router\RouteMiddleware` composes a router and a response
    prototype. When processed, if no match is found due to an un-matched HTTP
    method, it uses the response prototype to create a 405 response with an
    `Allow` header listing allowed methods; otherwise, it dispatches to the next
    middleware via the provided handler. If a match is made, the route result is
    stored as a request attribute using the `RouteResult` class name, and each
    matched parameter is also added as a request attribute before delegating
    request handling.

  - `Mezzio\Router\DispatchMiddleware` checks for a `RouteResult`
    attribute in the request. If none is found, it delegates handling of the
    request to the handler. If one is found, it pulls the matched middleware and
    processes it. If the middleware is not http-interop middleware, it raises an
    exception.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.2.0 - 2017-10-09

### Added

- [zendframework/zend-expressive-router#36](https://github.com/zendframework/zend-expressive-router/pull/36) adds
  support for http-interop/http-middleware 0.5.0 via a polyfill provided by the
  package webimpress/http-middleware-compatibility. Essentially, this means you
  can drop this package into an application targeting either the 0.4.1 or 0.5.0
  versions of http-middleware, and it will "just work".

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.1.0 - 2017-01-24

### Added

- [zendframework/zend-expressive-router#32](https://github.com/zendframework/zend-expressive-router/pull/32) adds
  support for [http-interop/http-middleware](https://github.com/http-interop/http-middleware)
  server middleware in `Route` instances.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.0.0 - 2017-01-06

### Added

- [zendframework/zend-expressive-router#6](https://github.com/zendframework/zend-expressive-router/pull/6) modifies `RouterInterface::generateUri` to
  support an `$options` parameter, which may pass additional configuration options to the actual router.
- [zendframework/zend-expressive-router#21](https://github.com/zendframework/zend-expressive-router/pull/21) makes the configured path definition
  accessible in the `RouteResult`.

### Deprecated

- Nothing.

### Removed

- Removed `RouteResultObserverInterface` and `RouteResultSubjectInterface`, as they were deprecated in 1.2.0.

### Fixed

- Nothing.

## 1.3.2 - 2016-12-14

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-router#29](https://github.com/zendframework/zend-expressive-router/pull/29) removes
  the patch introduced with [zendframework/zend-expressive-router#27](https://github.com/zendframework/zend-expressive-router/pull/27)
  and 1.3.1, as it causes `Mezzio\Application` to raise exceptions
  regarding duplicate routes, and because some implementations, including
  FastRoute, also raise errors on duplication. It will be up to individual
  routers to determine how to handle implicit HEAD and OPTIONS support.

## 1.3.1 - 2016-12-13

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-router#27](https://github.com/zendframework/zend-expressive-router/pull/27) fixes
  the behavior of `Route` to _always_ register `HEAD` and `OPTIONS` as allowed
  methods; this was the original intent of [zendframework/zend-expressive-router#24](https://github.com/zendframework/zend-expressive-router/pull/24).

## 1.3.0 - 2016-12-13

### Added

- [zendframework/zend-expressive-router#23](https://github.com/zendframework/zend-expressive-router/pull/23) adds a
  new static method on the `RouteResult` class, `fromRoute(Route $route, array
  $params = [])`, for creating a new `RouteResult` instance. It also adds
  `getMatchedRoute()` for retrieving the `Route` instance provided to that
  method. Doing so allows retrieving the list of supported HTTP methods, path,
  and route options from the matched route.

- [zendframework/zend-expressive-router#24](https://github.com/zendframework/zend-expressive-router/pull/24) adds
  two new methods to the `Route` class, `implicitHead()` and
  `implicitOptions()`. These can be used by routers or dispatchers to determine
  if a match based on `HEAD` or `OPTIONS` requests was due to the developer
  specifying the methods explicitly when creating the route (the `implicit*()`
  methods will return `false` if explicitly specified).

### Deprecated

- [zendframework/zend-expressive-router#23](https://github.com/zendframework/zend-expressive-router/pull/23)
  deprecates `RouteResult::fromRouteMatch()` in favor of the new `fromRoute()`
  method.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.2.0 - 2016-01-18

### Added

- Nothing.

### Deprecated

- [zendframework/zend-expressive-router#5](https://github.com/zendframework/zend-expressive-router/pull/5)
  deprecates both `RouteResultObserverInterface` and
  `RouteResultSubjectInterface`. The changes introduced in
  [mezzio zendframework/zend-expressive-router#270](https://github.com/zendframework/zend-expressive/pull/270)
  make the system obsolete. The interfaces will be removed in 2.0.0.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.1.0 - 2015-12-06

### Added

- [zendframework/zend-expressive-router#4](https://github.com/zendframework/zend-expressive-router/pull/4) adds
  `RouteResultSubjectInterface`, a complement to `RouteResultObserverInterface`,
  defining the following methods:
  - `attachRouteResultObserver(RouteResultObserverInterface $observer)`
  - `detachRouteResultObserver(RouteResultObserverInterface $observer)`
  - `notifyRouteResultObservers(RouteResult $result)`

### Deprecated

- Nothing.

### Removed

- [zendframework/zend-expressive-router#4](https://github.com/zendframework/zend-expressive-router/pull/4) removes
  the deprecation notice from `RouteResultObserverInterface`.

### Fixed

- Nothing.

## 1.0.1 - 2015-12-03

### Added

- Nothing.

### Deprecated

- [zendframework/zend-expressive-router#3](https://github.com/zendframework/zend-expressive-router/pull/3) deprecates `RouteResultObserverInterface`, which
  [has been moved to the `Mezzio` namespace and package](https://github.com/zendframework/zend-expressive/pull/206).

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-router#1](https://github.com/zendframework/zend-expressive-router/pull/1) fixes the
  coveralls support to trigger after scripts, so the status of the check does
  not make the tests fail. Additionally, ensured that coveralls can receive
  the coverage report!

## 1.0.0 - 2015-12-02

First stable release.

See the [Mezzio CHANGELOG](https://github.com/mezzio/mezzio/blob/master/CHANGELOG.md]
for a history of changes prior to 1.0.
