package com.matrix.core;

import lombok.Data;
import lombok.extern.slf4j.Slf4j;

import java.io.IOException;
import java.lang.reflect.InvocationTargetException;
import java.net.URL;
import java.net.URLClassLoader;
import java.util.Enumeration;
import java.util.jar.JarEntry;
import java.util.jar.JarFile;

@Slf4j
@Data
public class Start {
    public static void main(String[] argv) throws IOException, ClassNotFoundException, NoSuchMethodException, InvocationTargetException, InstantiationException, IllegalAccessException {
        log.info("start matrix core");
        loadPlugins();
    }

    public static void loadPlugins() throws IOException, ClassNotFoundException, IllegalAccessException, InstantiationException, NoSuchMethodException, InvocationTargetException {
        log.info("load plugin");
        JarFile jarFile = new JarFile("./test_plugin/target/test_plugin-1.0-SNAPSHOT.jar");
        Enumeration<JarEntry> e = jarFile.entries();

        URL[] urls = { new URL("jar:file:" + "./test_plugin/target/test_plugin-1.0-SNAPSHOT.jar"+"!/") };
        URLClassLoader cl = URLClassLoader.newInstance(urls);
        while (e.hasMoreElements()) {
            JarEntry je = e.nextElement();
            if(je.isDirectory() || !je.getName().endsWith(".class")){
                continue;
            }
            // -6 because of .class
            String className = je.getName().substring(0,je.getName().length()-6);
            className = className.replace('/', '.');
            System.out.println(className);
            Class c = cl.loadClass(className);
            c.getDeclaredConstructor().newInstance();
            log.info("加载完成");

        }
    }
}
