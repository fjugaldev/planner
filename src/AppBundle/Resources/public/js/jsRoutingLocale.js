/**
 * Created by jugalde on 4/8/2015.
 */

function loadRoutingLocale(locale) {
    var routes = Routing.getRoutes();
    for (var i = 0; i < routes.a.length; i++) {
        routes.c[routes.a[i]].defaults._locale = locale;
    }
    Routing.setRoutes(routes);
}
