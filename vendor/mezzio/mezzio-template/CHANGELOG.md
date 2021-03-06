# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 2.1.1 - 2021-01-23


-----

### Release Notes for [2.1.1](https://github.com/mezzio/mezzio-template/milestone/2)

2.1.x bugfix release (patch)

### 2.1.1

- Total issues resolved: **0**
- Total pull requests resolved: **1**
- Total contributors: **1**

 - [6: CS Fix for 2.1.x](https://github.com/mezzio/mezzio-template/pull/6) thanks to @samsonasik

## 2.0.2 - TBD

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.0.1 - 2019-06-20

### Added

- [zendframework/zend-expressive-template#22](https://github.com/zendframework/zend-expressive-template/pull/22) adds support for PHP 7.3.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.0.0 - 2018-03-15

### Added

- Nothing.

### Changed

- [zendframework/zend-expressive-template#17](https://github.com/zendframework/zend-expressive-template/pull/17)
  updates the component to add return type hints and scalar type hints,
  including nullable types and `void` return types. Notably, this affects the
  `TemplateRendererInterface`, which updates its method signatures to read:
  - `public function render(string $name, $params = []) : string`
  - `public function addPath(string $path, string $namespace = null) : void`
  - `public function getPaths() : array`
  - `public function addDefaultParam(string $templateName, string $param, $value) : void`

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.0.4 - 2017-01-11

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-template#10](https://github.com/zendframework/zend-expressive-template/pull/10) fixes
  the logic for merging default parameters with those passed when rendering in
  `DefaultParamsTrait::mergeParams()` to correctly replace values when duplicate
  entries are found.

## 1.0.3 - 2016-01-28

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-expressive-template#5](https://github.com/zendframework/zend-expressive-template/pull/5)
  actually removes laminas-stdlib from the dependency list, which was intended with
  [zendframework/zend-expressive-template#4](https://github.com/zendframework/zend-expressive-template/pull/4).

## 1.0.2 - 2016-01-25

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- [zendframework/zend-expressive-template#4](https://github.com/zendframework/zend-expressive-template/pull/4) removes
  the dependency on laminas-stdlib by inlining the `ArrayUtils::merge(`) routine as a
  private method of `Mezzio\Template\DefaultParamsTrait`.

### Fixed

- Nothing.

## 1.0.1 - 2015-12-02

### Added

- [zendframework/zend-expressive-template#1](https://github.com/zendframework/zend-expressive-template/pull/1) imports
  the `RenderingException` class from mezzio, pushing it into the
  `Mezzio\Template\Exception` namespace.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.0.0 - 2015-12-02

First stable release.

See the [Mezzio CHANGELOG](https://github.com/mezzio/mezzio/blob/master/CHANGELOG.md]
for a history of changes prior to 1.0.
