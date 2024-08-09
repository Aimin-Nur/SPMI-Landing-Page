(function(api) {

  api.sectionConstructor['celestium-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const celestium_section_lists = ['banner', 'service'];
  celestium_section_lists.forEach(celestium_homepage_scroll);

  function celestium_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('celestium_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);