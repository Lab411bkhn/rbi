import os;
import django;
os.environ.setdefault("DJANGO_SETTINGS_MODULE", "DjangoRBI.settings");
django.setup();

from polls.models import ApiComponentType;
print(ApiComponentType.objects.all());