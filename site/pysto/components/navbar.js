import Link from 'next/link'

export default function Footer({ children }) {
    return (
        <div className="container mx-auto flex ">
            <div className="flex-grow py-2 font-bold">
                <Link href="/" >Pysto</Link>
            </div>
            <div className="py-2 flex  text-sm">
            <Link href="/login" >
                <div className="mx-2 cursor-pointer">登录</div>
            </Link>
            <Link href="/">
                <div className="mx-2 cursor-pointer">注册</div>
            </Link>
            </div>
        </div>
    )
  }