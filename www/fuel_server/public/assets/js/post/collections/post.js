var app = app || {};

(function () {
    'use strict';

    app.postCollection = Backbone.Collection.extend({
        model: app.postModel,
        url: 'crud.php'
    });


})();