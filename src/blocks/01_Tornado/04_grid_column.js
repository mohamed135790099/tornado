//======> Docementation <======//
registerBlockType( 'tornado/grid-column', {
    title: __('Grid Column', 'tornado'),
    description: __('Grid System Row Column', 'tornado'),
    icon:'feedback',
    category: 'tornado',
    keywords: [ 'tornado', 'container', 'grid' ],
    supports: {
        align: ['full','wide']
    },
    attributes: {
        column_type : {
            type: 'string',
            default: 'standrd',
        },
        custom_class : {
            type: 'string',
            default: '',
        },
        column_xl : {
            type: 'string',
            default: '',
        },
        column_lg : {
            type: 'string',
            default: '',
        },
        column_md : {
            type: 'string',
            default: '',
        },
        column_sm : {
            type: 'string',
            default: '',
        },
        column_xs : {
            type: 'string',
            default: '',
        },
        column_dy : {
            type: 'string',
            default: '',
        },
    },
    //==== Editing Mode ====//
    edit: props => {
        //==== Block Data ====//
        const { attributes, setAttributes, isSelected } = props;
        props.setAttributes( { align: 'full' } );
        //==== Column Type ====//
        const set_column_type = value => props.setAttributes({ column_type: value });
        const set_custom_class = value => props.setAttributes({ custom_class: value });
        //==== Columns ====//
        const set_column_xl = value => props.setAttributes({ column_xl : value });
        const set_column_lg = value => props.setAttributes({ column_lg : value });
        const set_column_md = value => props.setAttributes({ column_md : value });
        const set_column_sm = value => props.setAttributes({ column_sm : value });
        const set_column_xs = value => props.setAttributes({ column_xs : value });
        const set_column_dy = value => props.setAttributes({ column_dy : value });
        //=== Column Classes ====//
        function column (type) {
            //==== Normal Grid Options ====//
            if (attributes.column_type === 'column') {
                return 'column';
            } else if (attributes.column_type === 'dynamic') {
                return (attributes.column_dy);
            } else if (attributes.column_type === 'standard') {
                return (attributes.column_xs + attributes.column_sm + attributes.column_md + attributes.column_lg + attributes.column_xl)
            }
        }
        //==== Colum Classes ====//
        function column_type_options (type) {
            //==== Standard ====//
            if(attributes.column_type === 'standard') {return (<div>
                {/*==== Extra Large ====*/}
                <SelectControl key="column_xl" label="xLarge Screens Columns" value={attributes.column_xl} onChange={ set_column_xl }
                    options={[
                        { label: '1/12 Column',  value: 'col-xl-1 ' },
                        { label: '2/12 Column',  value: 'col-xl-2 ' },
                        { label: '3/12 Column',  value: 'col-xl-3 ' },
                        { label: '4/12 Column',  value: 'col-xl-4 ' },
                        { label: '5/12 Column',  value: 'col-xl-5 ' },
                        { label: '6/12 Column',  value: 'col-xl-6 ' },
                        { label: '7/12 Column',  value: 'col-xl-7 ' },
                        { label: '8/12 Column',  value: 'col-xl-8 ' },
                        { label: '9/12 Column',  value: 'col-xl-9 ' },
                        { label: '10/12 Column', value: 'col-xl-10 ' },
                        { label: '11/12 Column', value: 'col-xl-11 ' },
                        { label: '12/12 Column', value: 'col-xl-12 ' },
                    ]}
                />
                {/*==== Large ====*/}
                <SelectControl key="column_lg" label="Large Screens Columns" value={attributes.column_lg} onChange={ set_column_lg }
                    options={[
                        { label: '1/12 Column',  value: 'col-l-1 ' },
                        { label: '2/12 Column',  value: 'col-l-2 ' },
                        { label: '3/12 Column',  value: 'col-l-3 ' },
                        { label: '4/12 Column',  value: 'col-l-4 ' },
                        { label: '5/12 Column',  value: 'col-l-5 ' },
                        { label: '6/12 Column',  value: 'col-l-6 ' },
                        { label: '7/12 Column',  value: 'col-l-7 ' },
                        { label: '8/12 Column',  value: 'col-l-8 ' },
                        { label: '9/12 Column',  value: 'col-l-9 ' },
                        { label: '10/12 Column', value: 'col-l-10 ' },
                        { label: '11/12 Column', value: 'col-l-11 ' },
                        { label: '12/12 Column', value: 'col-l-12 ' },
                    ]}
                />
                {/*==== Medium ====*/}
                <SelectControl key="column_md" label="Medium Screens Columns" value={attributes.column_md} onChange={ set_column_md }
                    options={[
                        { label: '1/12 Column',  value: 'col-m-1 ' },
                        { label: '2/12 Column',  value: 'col-m-2 ' },
                        { label: '3/12 Column',  value: 'col-m-3 ' },
                        { label: '4/12 Column',  value: 'col-m-4 ' },
                        { label: '5/12 Column',  value: 'col-m-5 ' },
                        { label: '6/12 Column',  value: 'col-m-6 ' },
                        { label: '7/12 Column',  value: 'col-m-7 ' },
                        { label: '8/12 Column',  value: 'col-m-8 ' },
                        { label: '9/12 Column',  value: 'col-m-9 ' },
                        { label: '10/12 Column', value: 'col-m-10 ' },
                        { label: '11/12 Column', value: 'col-m-11 ' },
                        { label: '12/12 Column', value: 'col-m-12 ' },
                    ]}
                />
                {/*==== Small ====*/}
                <SelectControl key="column_sm" label="Small Screens" value={attributes.column_sm} onChange={ set_column_sm }
                    options={[
                        { label: '1/12 Column',  value: 'col-s-1 ' },
                        { label: '2/12 Column',  value: 'col-s-2 ' },
                        { label: '3/12 Column',  value: 'col-s-3 ' },
                        { label: '4/12 Column',  value: 'col-s-4 ' },
                        { label: '5/12 Column',  value: 'col-s-5 ' },
                        { label: '6/12 Column',  value: 'col-s-6 ' },
                        { label: '7/12 Column',  value: 'col-s-7 ' },
                        { label: '8/12 Column',  value: 'col-s-8 ' },
                        { label: '9/12 Column',  value: 'col-s-9 ' },
                        { label: '10/12 Column', value: 'col-s-10 ' },
                        { label: '11/12 Column', value: 'col-s-11 ' },
                        { label: '12/12 Column', value: 'col-s-12 ' },
                    ]}
                />
                {/*==== Extra Small ====*/}
                <SelectControl key="column_xs" label="Extra Small Screens" value={attributes.column_xs} onChange={ set_column_xs }
                    options={[
                        { label: '1/12 Column',  value: 'col-1 ' },
                        { label: '2/12 Column',  value: 'col-2 ' },
                        { label: '3/12 Column',  value: 'col-3 ' },
                        { label: '4/12 Column',  value: 'col-4 ' },
                        { label: '5/12 Column',  value: 'col-5 ' },
                        { label: '6/12 Column',  value: 'col-6 ' },
                        { label: '7/12 Column',  value: 'col-7 ' },
                        { label: '8/12 Column',  value: 'col-8 ' },
                        { label: '9/12 Column',  value: 'col-9 ' },
                        { label: '10/12 Column', value: 'col-10 ' },
                        { label: '11/12 Column', value: 'col-11 ' },
                        { label: '12/12 Column', value: 'col-12 ' },
                    ]}
                />
            </div>)}
            //==== Dynamic ====//
            if(attributes.column_type === 'dynamic') {return (
                <SelectControl key="column_dy" label="Columns in Each Row" value={attributes.column_dy} onChange={ set_column_dy }
                    options={[
                        { label: '5 Columns in Row',  value: 'box-5x1 ' },
                        { label: '7 Columns in Row',  value: 'box-7x1 ' },
                        { label: '8 Columns in Row',  value: 'box-8x1 ' },
                        { label: '9 Columns in Row',  value: 'box-9x1 ' },
                        { label: '10 Columns in Row', value: 'box-10x1 ' },
                        { label: '11 Columns in Row', value: 'box-11x1 ' },
                    ]}
                />
            )}
        } 
        //==== Block Structure ====//
        return (
            <Panel>
                <PanelBody>
                    {/*===== Controls ======*/}
                    <InspectorControls key="inspector">
                        <PanelBody title={ __('Block Options', 'tornado') }>
                            {/* //=== Direction Class ===// */}
                            <SelectControl key="container-type" label="Grid Type" value={attributes.column_type} onChange={ set_column_type }
                                options={[
                                    { label: 'Standard Column', value: 'standard' },
                                    { label: 'Dynamic', value: 'dynamic' },
                                    { label: 'Masonry', value: 'column' },
                                ]}
                            />
                            {/*=== Custom Class ===*/}
                            <TextControl key="custom-class" label="Custom Class" value={ attributes.custom_class } onChange={ set_custom_class } />
                            {/*=== Columns Classes ===*/}
                            {column_type_options(attributes.column_type)}
                        </PanelBody>
                    </InspectorControls>
                    <div className={'col-block ' + column(attributes.column_type) + attributes.custom_class}>
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
        //=== Column Classes ====//
        function column (type) {
            //==== Normal Grid Options ====//
            if (attributes.column_type === 'column') {
                return 'column';
            } else if (attributes.column_type === 'dynamic') {
                return (attributes.column_dy);
            } else if (attributes.column_type === 'standard') {
                return (attributes.column_xs + attributes.column_sm + attributes.column_md + attributes.column_lg + attributes.column_xl)
            }
        }
        //==== Block Structure ====//
        return (
            <div className={'col-block ' + column(attributes.column_type)}>
                <InnerBlocks.Content />
            </div>
        );
    },
} );