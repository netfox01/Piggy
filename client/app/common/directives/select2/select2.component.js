let select2Component = function ($parse)
{
    'ngInject';
    return{
        restrict: 'A',
        scope: {
            selectChange: '&',
            options: '&'
        },
        link: function(scope, element, attrs)
            {

                setTimeout(function () {
                    var model = $parse(attrs.select2);
                    var data = scope.$eval(scope.options);
                    var bytext = typeof attrs.selectBytext == "undefined" ? false : true ;

                    $(element).select2(data);
                    $(element).hide();
                    var _scope = scope;

                    if(attrs.select2)
                    {
                        $(element).on('select2:select', function (evt) {
                            // log('on select2:select', evt.params.data.id)
                            scope.$apply(function(){
                                if(bytext)
                                {
                                    model.assign(scope.$parent, evt.params.data.text);
                                }
                                else
                                {
                                    model.assign(scope.$parent, evt.params.data.id );
                                }

                                scope.$parent.refresh_modal = false;
                            });
                        });

                        $(element).on('change', function (evt) {
                            var select = $(this)
                            var val = select.val()
                            // log('change', val)

                            if(val == null)
                            {
                                return 0;
                            }
                            setTimeout(function  () {
                                 scope.$apply(function(){
                                    if(bytext)
                                    {
                                        var text = select.find('option[value="' + val + '"]').text()
                                        model.assign(scope.$parent, text);
                                    }
                                    else
                                    {
                                        model.assign(scope.$parent, val );
                                    }

                                    scope.$parent.refresh_modal = false;
                                });
                            }, 0)
                        });

                        function watchModel ()
                        {
                            scope.$parent.$watch(model, function(newValue, oldValue, scope)
                            {
                                var refresh = typeof scope.refresh_modal == 'undefined' ? true : scope.refresh_modal;

                                if(refresh)
                                {
                                    var selected_value = newValue;
                                    if(bytext)
                                    {
                                        selected_value = $(element).find('option').filter(function () {
                                                                return $(this).html() == newValue
                                                            }).val();
                                    }

                                    if(selected_value || selected_value == 0)
                                    {
                                        $(element).val(selected_value)
                                        $(element).change();
                                    }
                                    else
                                    {
                                        $(element).attr('disabled', 'disabled');
                                    }

                                }
                                if (typeof _scope.selectChange() == 'function')
                                {
                                    _scope.selectChange()($(element), scope);
                                }
                                // scope.watchModel = watchModel;
                                scope.refresh_modal = true;
                            });

                        }
                        scope.$apply(function  () {
                            watchModel();
                        })
                        // scope.$parent.refresModal = watchModel;
                    }

                }, 0)
            }
    }
}



export default select2Component;

