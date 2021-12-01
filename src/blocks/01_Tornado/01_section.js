//======> Docementation <======//
registerBlockType( 'tornado/section', {
    title: __('Section', 'tornado'),
    description: __('Full Width Section Wraper', 'tornado'),
    icon:'feedback',
    category: 'tornado',
    keywords: [ 'tornado', 'container', 'grid', 'section' ],
    supports: {
        align: ['full','wide']
    },
    attributes: {
        custom_class : {
            type: 'string',
            default: '',
        },
        block_id : {
            type: 'string',
            default: '',
        },
    },
    //==== Editing Mode ====//
    edit: props => {
        //==== Block Data ====//
        const { attributes, setAttributes, isSelected } = props;
        props.setAttributes( { align: 'full' } );
        //==== Container Class ====//
        const set_custom_class = value => props.setAttributes({ custom_class: value });
        const set_block_id = value => setAttributes({ block_id: value });
        //==== Block Structure ====//
        return (
            <Panel>
                <PanelBody>
                    {/*===== Controls ======*/}
                    <InspectorControls key="inspector">
                        <PanelBody title={ __('Block Options', 'tornado') }>
                            {/*=== Section ID ===*/}
                            <TextControl key="block-id" label={ __('CSS ID', 'tornado') } value={ attributes.block_id } onChange={ set_block_id } />
                            {/*=== Section Title ===*/}
                            <TextControl key="section-title" label={ __('Add CSS Class', 'tornado') } value={ attributes.custom_class } onChange={ set_custom_class } />
                        </PanelBody>
                    </InspectorControls>
                    <div className={'section-block section ' + attributes.custom_class} id={attributes.block_id}>
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
            <div className={'section-block section ' + attributes.custom_class} id={attributes.block_id}>
                <InnerBlocks.Content />
            </div>
        );
    },
} );