var app = app || {};

(function () {
  "use strict";


  app.postIndexView = Backbone.View.extend({

    template: _.template($('#indexTemplate').html()),
    render: function () {
      this.$el.html(
          this.template({cruds: this.collection.toJSON()})
      );
      return this;
    }
  });

})();