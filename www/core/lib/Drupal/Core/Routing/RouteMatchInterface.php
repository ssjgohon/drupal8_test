<?php

/**
 * @file
 * Contains Drupal\Core\Routing\RouteMatchInterface.
 */

namespace Drupal\Core\Routing;

/**
 * Provides an interface for classes representing the result of routing.
 *
 * Routing is the process of selecting the best matching candidate from a
 * collection of routes for an incoming request. The relevant properties of a
 * request include the path as well as a list of raw parameter values derived
 * from the URL. If an appropriate route is found, raw parameter values will be
 * upcast automatically if possible.
 *
 * The route match object contains useful information about the selected route
 * as well as the raw and upcast parameters derived from the incoming
 * request.
 */
interface RouteMatchInterface {

  /**
   * Returns the route name.
   *
   * @return string|null
   *   The route name. NULL if no route is matched.
   */
  public function getRouteName();

  /**
   * Returns the route object.
   *
   * @return \Symfony\Component\Routing\Route|null
   *   The route object. NULL if no route is matched.
   */
  public function getRouteObject();

  /**
   * Returns the value of a named route parameter.
   *
   * @param string $parameter_name
   *   The parameter name.
   *
   * @return mixed|null
   *   The parameter value. NULL if the route doesn't define the parameter or
   *   if the parameter value can't be determined from the request.
   */
  public function getParameter($parameter_name);

  /**
   * Returns the bag of all route parameters.
   *
   * @return \Symfony\Component\HttpFoundation\ParameterBag
   *   The parameter bag.
   */
  public function getParameters();

  /**
   * Returns the raw value of a named route parameter.
   *
   * @param string $parameter_name
   *   The parameter name.
   *
   * @return string|null
   *   The raw (non-upcast) parameter value. NULL if the route doesn't define
   *   the parameter or if the raw parameter value can't be determined from the
   *   request.
   */
  public function getRawParameter($parameter_name);

  /**
   * Returns the bag of all raw route parameters.
   *
   * @return \Symfony\Component\HttpFoundation\ParameterBag
   *   The parameter bag.
   */
  public function getRawParameters();

}
