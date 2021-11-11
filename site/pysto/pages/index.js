import Head from 'next/head'
import { useRouter } from 'next/router'
import Layout from '../components/layout'

export default function Home({
  posts
}) {
  return (
    <div className="flex flex-col items-center justify-center min-h-screen py-2">
      <Head>
        <title>Pysto</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className="flex flex-col items-center justify-center w-full flex-1 px-20 text-center">
        <h1 className="text-6xl font-bold">
            Pysto  硬件增强平台 {posts.name}
        </h1>
      </main>


    </div>
  )
}

export async function getServerSideProps(context) {
  console.log(context);
  const res = await fetch('http://127.0.0.1:3000/api/hello')
  const posts = await res.json()
  return {
    props: {
      posts,
    },
  }
}

Home.getLayout = function getLayout(page) {
  return (
    <Layout>
      {page}
    </Layout>
  )
}

