<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<script>
    $(function() {
        $('#table').searchable({
            striped: true,
            searchType: 'fuzzy'
        });

        $('#searchable-container').searchable({
            searchField: '#container-search',
            selector: '.row',
            childSelector: '.col-xs-4',
            show: function(elem) {
                elem.slideDown(100);
            },
            hide: function(elem) {
                elem.slideUp(100);
            }
        })
    });
</script>