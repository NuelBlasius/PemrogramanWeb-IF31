"use client"; // Mark the component as a Client Component

import React, { useState } from 'react';

const MyForm = () => {
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log('Name:', name);
        console.log('Email:', email);
        setName('');
        setEmail('');
    };

    return (
        <form onSubmit={handleSubmit} className="max-w-md mx-auto p-4 border rounded shadow-lg bg-black">
            <h1 className="text-center text-2xl font-semibold text-white mb-4">My Form</h1>
            <div className="mb-4 text-center">
                <label htmlFor="name" className="block text-sm font-medium text-white">Name:</label>
                <input
                    type="text"
                    id="name"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                    required
                    className="mt-1 block w-full p-2 border border-gray-600 rounded-md text-white bg-gray-800 focus:outline-none focus:ring focus:ring-blue-300"
                />
            </div>
            <div className="mb-4 text-center">
                <label htmlFor="email" className="block text-sm font-medium text-white">Email:</label>
                <input
                    type="email"
                    id="email"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    required
                    className="mt-1 block w-full p-2 border border-gray-600 rounded-md text-white bg-gray-800 focus:outline-none focus:ring focus:ring-blue-300"
                />
            </div>
            <button
                type="submit"
                className="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300"
            >
                Submit
            </button>
        </form>
    );
};

export default function Page() {
    return (
        <div className="min-h-screen flex items-center justify-center bg-black"> 
            <MyForm />
        </div>
    );
}
