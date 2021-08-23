const { RichText } = window.wp.blockEditor

export default function Save({ className, attributes }) {
    return (
        <RichText.Content
            tagName="p"
            className={className}
            value={attributes.content}
        />
    )
}