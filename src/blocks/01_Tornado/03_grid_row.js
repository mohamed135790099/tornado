//======> Docementation <======//
registerBlockType( 'tornado/grid', {
    title: __('Grid Row', 'tornado'),
    description: __('Grid System Row', 'tornado'),
    icon:'feedback',
    category: 'tornado',
    keywords: [ 'tornado', 'container', 'grid' ],
    supports: {
        align: ['full','wide']
    },
    attributes: {
        grid_type : {
            type: 'string',
            default: 'row',
        },
        /* Standard Options */
        row_direction : {
            type: 'string',
            default: '',
        },
        row_gutter : {
            type: 'string',
            default: '',
        },
        row_alignment_x : {
            type: 'string',
            default: '',
        },
        row_alignment_y : {
            type: 'string',
            default: '',
        },
        /* Masonry Options */
        masonry_xl : {
            type: 'string',
            default: '',
        },
        masonry_lg : {
            type: 'string',
            default: '',
        },
        masonry_md : {
            type: 'string',
            default: '',
        },
        masonry_sm : {
            type: 'string',
            default: '',
        },
        masonry_xs : {
            type: 'string',
            default: '',
        },
    },
    //==== Editing Mode ====//
    edit: props => {
        //==== Block Data ====//
        const { attributes, setAttributes, isSelected } = props;
        props.setAttributes( { align: 'full' } );
        //==== Row Type ====//
        const set_grid_type = value => props.setAttributes({ grid_type: value });
        //==== Sandard Options ====//
        const set_row_direction = value => props.setAttributes({ row_direction: value });
        const set_row_gutter = value => props.setAttributes({ row_gutter: value });
        const set_row_alignment_x = value => props.setAttributes({ row_alignment_x: value });
        const set_row_alignment_y = value => props.setAttributes({ row_alignment_y: value });
        //==== Masonry Columns ====//
        const set_masonry_xl = value => props.setAttributes({ masonry_xl : value });
        const set_masonry_lg = value => props.setAttributes({ masonry_lg : value });
        const set_masonry_md = value => props.setAttributes({ masonry_md : value });
        const set_masonry_sm = value => props.setAttributes({ masonry_sm : value });
        const set_masonry_xs = value => props.setAttributes({ masonry_xs : value });
        //=== Row Classes ====//
        function grid_output (type) {
            //==== Normal Grid Options ====//
            if (attributes.grid_type === 'row') {
                return 'row ' + attributes.row_direction + attributes.row_gutter + attributes.row_alignment_x + attributes.row_alignment_y;
            }
        }
        //==== Row Type ====//
        function grid_type_options (type) {
            //==== Normal Grid Options ====//
            if (attributes.grid_type === 'row') {return (<div>
                    {/*==== Row Direction ====*/}
                    <SelectControl key="row-direction" label="Row Direction" value={attributes.row_direction} onChange={ set_row_direction }
                        options={[
                            { label: 'Default', value: '' },
                            { label: 'Reverse', value: 'row-reverse ' },
                        ]}
                    />
                    {/*==== Row Gutter ====*/}
                    <SelectControl key="row-gutter" label="Row Gutter" value={attributes.row_gutter} onChange={ set_row_gutter }
                        options={[
                            { label: 'Default', value: '' },
                            { label: 'No Gutter', value: 'no-gutter ' },
                            { label: 'Small Gutter', value: 'gutter-small ' },
                            { label: 'Medium Gutter', value: 'gutter-medium ' },
                            { label: 'Large Gutter', value: 'gutter-large ' },
                        ]}
                    />
                    {/*==== Row Align Horizontally ====*/}
                    <SelectControl key="row-align-x" label="Row Align Horizontally" value={attributes.row_alignment_x} onChange={ set_row_alignment_x }
                        options={[
                            { label: 'Default', value: '' },
                            { label: 'Center', value: 'align-center-x ' },
                            { label: 'Direction Start', value: 'align-start-x ' },
                            { label: 'Direction End', value: 'align-end-x ' },
                            { label: 'a Round Columns', value: 'align-around ' },
                            { label: 'Between Columns', value: 'align-between ' },
                        ]}
                    />
                    {/*==== Row Align Vertically ====*/}
                    <SelectControl key="row-align-y" label="Row Align Vertically" value={attributes.row_alignment_y} onChange={ set_row_alignment_y }
                        options={[
                            { label: 'Default', value: '' },
                            { label: 'Center', value: 'align-center-y ' },
                            { label: 'Direction Start', value: 'align-start-y ' },
                            { label: 'Direction End', value: 'align-end-y ' },
                        ]}
                    />
            </div>)}
            //==== Masonry Grid Options ====//
            if(attributes.grid_type === 'masonry') {return (<div>
                {/*==== Extra Large ====*/}
                <SelectControl key="masonry_xl" label="xLarge Screens Columns" value={attributes.masonry_xl} onChange={ set_masonry_xl }
                    options={[
                        { label: '1 Column in Row',   value: 'masonry-xl-1x1' },
                        { label: '2 Columns in Row',  value: 'masonry-xl-2x1' },
                        { label: '3 Columns in Row',  value: 'masonry-xl-3x1' },
                        { label: '4 Columns in Row',  value: 'masonry-xl-4x1' },
                        { label: '5 Columns in Row',  value: 'masonry-xl-5x1' },
                        { label: '6 Columns in Row',  value: 'masonry-xl-6x1' },
                        { label: '7 Columns in Row',  value: 'masonry-xl-7x1' },
                        { label: '8 Columns in Row',  value: 'masonry-xl-8x1' },
                        { label: '9 Columns in Row',  value: 'masonry-xl-9x1' },
                        { label: '10 Columns in Row', value: 'masonry-xl-10x1' },
                        { label: '11 Columns in Row', value: 'masonry-xl-11x1' },
                        { label: '12 Columns in Row', value: 'masonry-xl-12x1' },
                    ]}
                />
                {/*==== Large ====*/}
                <SelectControl key="masonry_lg" label="Large Screens Columns" value={attributes.masonry_lg} onChange={ set_masonry_lg }
                    options={[
                        { label: '1 Column in Row',   value: 'masonry-l-1x1' },
                        { label: '2 Columns in Row',  value: 'masonry-l-2x1' },
                        { label: '3 Columns in Row',  value: 'masonry-l-3x1' },
                        { label: '4 Columns in Row',  value: 'masonry-l-4x1' },
                        { label: '5 Columns in Row',  value: 'masonry-l-5x1' },
                        { label: '6 Columns in Row',  value: 'masonry-l-6x1' },
                        { label: '7 Columns in Row',  value: 'masonry-l-7x1' },
                        { label: '8 Columns in Row',  value: 'masonry-l-8x1' },
                        { label: '9 Columns in Row',  value: 'masonry-l-9x1' },
                        { label: '10 Columns in Row', value: 'masonry-l-10x1' },
                        { label: '11 Columns in Row', value: 'masonry-l-11x1' },
                        { label: '12 Columns in Row', value: 'masonry-l-12x1' },
                    ]}
                />
                {/*==== Medium ====*/}
                <SelectControl key="masonry_md" label="Medium Screens Columns" value={attributes.masonry_md} onChange={ set_masonry_md }
                    options={[
                        { label: '1 Column in Row',   value: 'masonry-m-1x1' },
                        { label: '2 Columns in Row',  value: 'masonry-m-2x1' },
                        { label: '3 Columns in Row',  value: 'masonry-m-3x1' },
                        { label: '4 Columns in Row',  value: 'masonry-m-4x1' },
                        { label: '5 Columns in Row',  value: 'masonry-m-5x1' },
                        { label: '6 Columns in Row',  value: 'masonry-m-6x1' },
                        { label: '7 Columns in Row',  value: 'masonry-m-7x1' },
                        { label: '8 Columns in Row',  value: 'masonry-m-8x1' },
                        { label: '9 Columns in Row',  value: 'masonry-m-9x1' },
                        { label: '10 Columns in Row', value: 'masonry-m-10x1' },
                        { label: '11 Columns in Row', value: 'masonry-m-11x1' },
                        { label: '12 Columns in Row', value: 'masonry-m-12x1' },
                    ]}
                />
                {/*==== Small ====*/}
                <SelectControl key="masonry_sm" label="Medium Screens Columns" value={attributes.masonry_sm} onChange={ set_masonry_sm }
                    options={[
                        { label: '1 Column in Row',   value: 'masonry-s-1x1' },
                        { label: '2 Columns in Row',  value: 'masonry-s-2x1' },
                        { label: '3 Columns in Row',  value: 'masonry-s-3x1' },
                        { label: '4 Columns in Row',  value: 'masonry-s-4x1' },
                        { label: '5 Columns in Row',  value: 'masonry-s-5x1' },
                        { label: '6 Columns in Row',  value: 'masonry-s-6x1' },
                        { label: '7 Columns in Row',  value: 'masonry-s-7x1' },
                        { label: '8 Columns in Row',  value: 'masonry-s-8x1' },
                        { label: '9 Columns in Row',  value: 'masonry-s-9x1' },
                        { label: '10 Columns in Row', value: 'masonry-s-10x1' },
                        { label: '11 Columns in Row', value: 'masonry-s-11x1' },
                        { label: '12 Columns in Row', value: 'masonry-s-12x1' },
                    ]}
                />
                {/*==== Extra Small ====*/}
                <SelectControl key="masonry_xs" label="Medium Screens Columns" value={attributes.masonry_xs} onChange={ set_masonry_xs }
                    options={[
                        { label: '1 Column in Row',   value: 'masonry-1x1' },
                        { label: '2 Columns in Row',  value: 'masonry-2x1' },
                        { label: '3 Columns in Row',  value: 'masonry-3x1' },
                        { label: '4 Columns in Row',  value: 'masonry-4x1' },
                        { label: '5 Columns in Row',  value: 'masonry-5x1' },
                        { label: '6 Columns in Row',  value: 'masonry-6x1' },
                        { label: '7 Columns in Row',  value: 'masonry-7x1' },
                        { label: '8 Columns in Row',  value: 'masonry-8x1' },
                        { label: '9 Columns in Row',  value: 'masonry-9x1' },
                        { label: '10 Columns in Row', value: 'masonry-10x1' },
                        { label: '11 Columns in Row', value: 'masonry-11x1' },
                        { label: '12 Columns in Row', value: 'masonry-12x1' },
                    ]}
                />
            </div>)}
        } 
        //==== Block Structure ====//
        return (
            <Panel>
                <PanelBody>
                    {/*===== Controls ======*/}
                    <InspectorControls key="inspector">
                        <PanelBody title={ __('Block Options', 'tornado') }>
                            {/* //=== Direction Class ===// */}
                            <SelectControl key="container-type" label="Grid Type" value={attributes.grid_type} onChange={ set_grid_type }
                                options={[
                                    { label: 'Standard Grid', value: 'row' },
                                    { label: 'Masonry Grid', value: 'masonry' },
                                ]}
                            />
                            {grid_type_options(attributes.grid_type)}
                        </PanelBody>
                    </InspectorControls>
                    <div className={'grid-block ' + grid_output(attributes.grid_type)}>
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
        //=== Row Classes ====//
        function grid_output (type) {
            //==== Normal Grid Options ====//
            if (attributes.grid_type === 'row') {
                return 'row ' + attributes.row_direction + attributes.row_gutter + attributes.row_alignment_x + attributes.row_alignment_y;
            }
        }
        //==== Block Structure ====//
        return (
            <div className={'grid-block ' + grid_output(attributes.grid_type)}>
                <InnerBlocks.Content />
            </div>
        );
    },
} );