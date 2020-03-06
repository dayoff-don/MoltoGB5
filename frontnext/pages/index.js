<<<<<<< HEAD
import Link from 'next/link'
import Layout from '../components/Layout';
import Head from 'next/head';

const Index = () => (
    <Layout>
        <Head>
            <title>
                Index 페이지
            </title>
        </Head>
        <h1>
            안녕, Next.js
        </h1>
        <h2>
            <Link href="/about">
                <a style={{background: 'black', color: 'white'}}>소개</a>
            </Link>
        </h2>
    </Layout>
);

=======
import Link from 'next/link'
import Layout from '../components/Layout';
import Head from 'next/head';

const Index = () => (
    <Layout>
        <Head>
            <title>
                Index 페이지
            </title>
        </Head>
        <h1>
            안녕, Next.js
        </h1>
        <h2>
            <Link href="/about">
                <a style={{background: 'black', color: 'white'}}>소개</a>
            </Link>
        </h2>
    </Layout>
);

>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
export default Index;