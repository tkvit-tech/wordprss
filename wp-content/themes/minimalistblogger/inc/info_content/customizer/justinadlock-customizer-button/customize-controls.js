(function (api) {
  // Extends our custom "minimalistblogger" section.
  api.sectionConstructor["minimalistblogger"] = api.Section.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });

  // Extends our custom "minimalistblogger" section.
  api.controlConstructor["minimalistblogger_control"] = api.Control.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });
})(wp.customize);
