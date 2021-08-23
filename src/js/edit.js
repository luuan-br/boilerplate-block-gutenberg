const { RichText } = window.wp.blockEditor

export default function Edit({ attributes, setAttributes }) {
    const formats = ['core/bold', 'core/italic', 'core/link', 'core/strikethrough']

    function onChangeContent(newContent) {
        setAttributes({ content: newContent });
    }

    return (
        <RichText
            tagName="p"
            format='string'
            onChange={onChangeContent}
            value={attributes.content}
            allowedFormats={formats}
        />
    )
}