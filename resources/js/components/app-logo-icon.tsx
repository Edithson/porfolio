import type { ImgHTMLAttributes } from 'react';

export default function AppLogoIcon(props: ImgHTMLAttributes<HTMLImageElement>) {
    return (
        // importation de mon logo svg
        <img
            src="/favicon.ico"
            alt="Logo"
            {...props}
        />
    );
}
