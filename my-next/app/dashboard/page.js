import Link from "next/link";

export default function Dashboard() {
    return (
        <div>
            <h1>This is Dashboard Page</h1>
            <br/>
            &bull; <Link href="dashboard/users/nuel/001001">Nuel</Link><br/>
            &bull; <Link href="dashboard/users/valen/002002">Valentino</Link><br/>
        </div>
    );
}