(function() {
    const { registerBlockType } = wp.blocks;
    const { createElement } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, TextControl, RangeControl, ToggleControl, ColorPicker } = wp.components;
    const { __ } = wp.i18n;

    registerBlockType('customsclearance/services-block', {
        title: __('Services Block', 'customsclearance'),
        icon: 'admin-tools',
        category: 'customsclearance',
        description: __('Display your services in a responsive grid layout.', 'customsclearance'),
        
        attributes: {
            title: {
                type: 'string',
                default: 'Découvrez nos services'
            },
            subtitle: {
                type: 'string',
                default: ''
            },
            postsPerPage: {
                type: 'number',
                default: 6
            },
            showViewAll: {
                type: 'boolean',
                default: true
            },
            backgroundColor: {
                type: 'string',
                default: 'bg-gray-50'
            },
            textColor: {
                type: 'string',
                default: 'text-gray-900'
            }
        },

        edit: function(props) {
            const { attributes, setAttributes } = props;
            const { title, subtitle, postsPerPage, showViewAll, backgroundColor, textColor } = attributes;

            return createElement('div', {
                className: 'services-block-editor'
            }, [
                // Inspector Controls
                createElement(InspectorControls, { key: 'inspector' },
                    createElement(PanelBody, {
                        title: __('Settings', 'customsclearance'),
                        initialOpen: true
                    }, [
                        createElement(TextControl, {
                            label: __('Section Title', 'customsclearance'),
                            value: title,
                            onChange: (value) => setAttributes({ title: value })
                        }),
                        createElement(TextControl, {
                            label: __('Section Subtitle', 'customsclearance'),
                            value: subtitle,
                            onChange: (value) => setAttributes({ subtitle: value })
                        }),
                        createElement(RangeControl, {
                            label: __('Number of Services', 'customsclearance'),
                            value: postsPerPage,
                            onChange: (value) => setAttributes({ postsPerPage: value }),
                            min: 1,
                            max: 12
                        }),
                        createElement(ToggleControl, {
                            label: __('Show "View All" Button', 'customsclearance'),
                            checked: showViewAll,
                            onChange: (value) => setAttributes({ showViewAll: value })
                        })
                    ])
                ),

                // Block Preview
                createElement('div', {
                    key: 'preview',
                    className: `services-block-preview py-8 px-4 ${backgroundColor}`
                }, [
                    createElement('div', {
                        className: 'container mx-auto max-w-4xl'
                    }, [
                        // Header
                        createElement('div', {
                            className: 'text-center mb-8'
                        }, [
                            createElement('h2', {
                                className: `text-3xl font-bold ${textColor} mb-4`
                            }, title),
                            subtitle && createElement('p', {
                                className: 'text-lg text-gray-600'
                            }, subtitle)
                        ]),

                        // Services Grid Preview
                        createElement('div', {
                            className: 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6'
                        }, Array.from({ length: Math.min(postsPerPage, 6) }, (_, i) =>
                            createElement('div', {
                                key: i,
                                className: 'bg-white rounded-lg shadow-md p-4 border-2 border-dashed border-gray-300'
                            }, [
                                createElement('div', {
                                    className: 'w-full h-32 bg-gray-200 rounded mb-4 flex items-center justify-center'
                                }, [
                                    createElement('i', {
                                        className: 'fas fa-cogs text-gray-400 text-2xl'
                                    })
                                ]),
                                createElement('h3', {
                                    className: 'text-lg font-semibold text-gray-900 mb-2'
                                }, `Service ${i + 1}`),
                                createElement('p', {
                                    className: 'text-gray-600 text-sm'
                                }, 'Service description will appear here...'),
                                createElement('a', {
                                    className: 'text-blue-500 text-sm font-medium',
                                    href: '#'
                                }, 'En savoir plus →')
                            ])
                        )),

                        // View All Button Preview
                        showViewAll && createElement('div', {
                            className: 'mt-6 text-center'
                        }, [
                            createElement('a', {
                                className: 'inline-flex items-center bg-blue-600 text-white font-bold py-2 px-6 rounded-lg',
                                href: '#'
                            }, [
                                'Voir tous nos services',
                                createElement('svg', {
                                    className: 'w-4 h-4 ml-2',
                                    fill: 'none',
                                    stroke: 'currentColor',
                                    viewBox: '0 0 24 24'
                                }, createElement('path', {
                                    strokeLinecap: 'round',
                                    strokeLinejoin: 'round',
                                    strokeWidth: '2',
                                    d: 'M9 5l7 7-7 7'
                                }))
                            ])
                        ])
                    ])
                ])
            ]);
        },

        save: function() {
            // Server-side rendering
            return null;
        }
    });
})();

