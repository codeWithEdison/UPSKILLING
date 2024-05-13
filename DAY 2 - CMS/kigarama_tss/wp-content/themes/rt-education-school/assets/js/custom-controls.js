(function(api) {

    api.sectionConstructor['rt-education-school-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const rt_education_school_section_lists = ['banner', 'service'];
    rt_education_school_section_lists.forEach(rt_education_school_homepage_scroll);

    function rt_education_school_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('rt_education_school_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);