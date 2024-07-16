(function(api) {

  api.sectionConstructor['savora-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const savora_section_lists = ['banner', 'service'];
  savora_section_lists.forEach(savora_homepage_scroll);

  function savora_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('savora_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);