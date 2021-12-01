//======> Docementation <======//
registerBlockType( 'tornado/container', {
    title: __('Container', 'tornado'),
    description: __('Container Block With Title', 'tornado'),
    icon:'feedback',
    category: 'tornado',
    keywords: [ 'tornado', 'container', 'grid' ],
    supports: {
        align: ['full','wide']
    },
    attributes: {
        container_type : {
            type: 'string',
            default: 'container',
        },
    },
    //==== Editing Mode ====//
    edit: props => {
        //==== Block Data ====//
        const { attributes, setAttributes, isSelected } = props;
        props.setAttributes( { align: 'full' } );
        //==== Container Class ====//
        const set_container_type = value => props.setAttributes({ container_type: value });

        //==== Block Structure ====//
        return (
            <Panel>
                <PanelBody>
                    {/*===== Controls ======*/}
                    <InspectorControls key="inspector">
                        <PanelBody title={ __('Block Options', 'tornado') }>
                            {/* //=== Direction Class ===// */}
                            <SelectControl key="container-type" label={ __( 'Container Type', 'tornado') }
                                value={ attributes.container_type ? attributes.container_type : '' }
                                options={[
                                    { label: 'Default', value: 'container' },
                                    { label: 'xLarge Container', value: 'container-xl' },
                                    { label: 'Full Width Container', value: 'container-fluid' },
                                ]}
                                onChange={ set_container_type }
                            />
                        </PanelBody>
                    </InspectorControls>
                    <div className={'container-block ' + attributes.container_type}>
                        <InnerBlocks />
                    </div>
                </PanelBody>
            </Panel>
        );
    },

    //==== Puplish Mode ====//
    save: props => {
        //==== Block Data ====//
        const { attributes } = props;

        //==== Block Structure ====//
        return (
            <div className={'container-block ' + attributes.container_type}>
                <InnerBlocks.Content />
            </div>
        );
    },
} );