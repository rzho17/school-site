import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
    const { animationType } = attributes;

    return (
        <>
            <InspectorControls>
                <PanelBody title={ __( 'Animation Settings', 'aos-wrapper' ) }>
                    <SelectControl
                        label={ __( 'Animation Type', 'aos-wrapper' ) }
                        value={ animationType }
                        options={ [
                            { label: __( 'Fade Up', 'aos-wrapper' ), value: 'fade-up' },
                            { label: __( 'Fade Down', 'aos-wrapper' ), value: 'fade-down' },
                            { label: __( 'Fade Left', 'aos-wrapper' ), value: 'fade-left' },
                            { label: __( 'Fade Right', 'aos-wrapper' ), value: 'fade-right' },
                            { label: __( 'Zoom In', 'aos-wrapper' ), value: 'zoom-in' },
                            { label: __( 'Flip Up', 'aos-wrapper' ), value: 'flip-up' }
                        ] }
                        onChange={ ( newAnimation ) => setAttributes( { animationType: newAnimation } ) }
                    />
                </PanelBody>
            </InspectorControls>
            <div { ...useBlockProps( { 'data-aos': animationType } ) }>
                <InnerBlocks />
            </div>
        </>
    );
}