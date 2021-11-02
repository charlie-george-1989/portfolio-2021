import './util/bootstrap';
import './animation/paralax';
import Router from './util/router';
import common from './routes/common';

const routes = new Router({
  common
});

jQuery(document).ready(() => routes.loadEvents());
