
var app  = app  || {};

(function () {
    "use strict";


    app.Router = Backbone.Router.extend({
        routes: {
            "crud/new": "create",
            "crud/index": "index",
            "crud/:id/edit": "edit",
            "crud/:id/delete": "delete"
        },

        $container: $('#primary-content'),

        initialize: function () {
            this.collection = new app.postCollection();
            this.collection.fetch({ajaxSync: false});
            app.helpers.debug(this.collection);
            this.index();
            // start backbone watching url changes
            Backbone.history.start();
        },

        create: function () {
            var view = new app.postNewView({
                collection: this.collection,
                model: new app.postModel()
            });
            this.$container.html(view.render().el);
            $('.myid').val(_.random(0, 10000));
        },

        delete: function (id) {
            var crud = this.collection.get(id);
            crud.destroy();
            $.get("crud.php?p=trash", {id: id}, function (data) {
                Backbone.history.navigate("crud/index", {trigger: true});
            });
        },

        edit: function (id) {
            var view = new app.postEditView({model: this.collection.get(id)});
            this.$container.html(view.render().el);
        },

        index: function () {
            var view = new app.postIndexView({collection: this.collection});
            this.$container.html(view.render().el);
        }
    });
})();