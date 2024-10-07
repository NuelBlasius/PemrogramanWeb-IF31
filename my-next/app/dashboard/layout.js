import React from 'react';
import Link from 'next/link';

export default function DashboardLayout({
  children, // will be a page or nested layout
}) {
  return (
    <div>
      <nav className="bg-blue-600 p-4">
        <div className="container mx-auto flex justify-between items-center">
          <div className="text-white text-lg font-bold">MyApp</div>
          <ul className="flex space-x-8">
            <li>
              <Link href="/dashboard/blog" className="text-white hover:text-blue-300">Blog</Link>
            </li>
            <li>
              <Link href="/dashboard/about" className="text-white hover:text-blue-300">About</Link>
            </li>
            <li>
              <Link href="/dashboard/setting" className="text-white hover:text-blue-300">Settings</Link>
            </li>
          </ul>
        </div>
      </nav>
      <div className="container mx-auto p-4">
        {children} {/* Render nested pages or components here */}
      </div>
    </div>
  );
}
