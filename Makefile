# Makefile for building the project

app_name=ndcregistration
target_dir=$(CURDIR)/build
app_version=0.1.2

clean:
	rm -fr $(target_dir)

appstore:
	mkdir -p $(target_dir)
	tar cvzf $(target_dir)/$(app_name)-$(app_version).tar.gz ../$(app_name) \
	--exclude=.git \
	--exclude=.gitignore \
	--exclude=build \
	--exclude=Makefile \
