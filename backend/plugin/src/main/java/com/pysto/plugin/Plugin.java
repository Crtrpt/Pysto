package com.pysto.plugin;

public interface Plugin {
    public void install();
    public void uninstall();
    public void start();
    public void stop();
    public void reload();
}
