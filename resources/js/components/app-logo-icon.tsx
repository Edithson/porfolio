export default function AppLogoIcon({ className, ...props }: React.ComponentProps<'img'>) {
    return (
        <img
            src="/img/icon.png"
            alt="Logo G. Fonhouo"
            className={className}
            {...props}
        />
    );
}
